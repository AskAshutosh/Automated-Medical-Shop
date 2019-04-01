from subprocess import Popen, PIPE
import subprocess
import RPi.GPIO as GPIO
import time

#medlist
#med cost row col

from tkinter import *
#qrlst1=['First','Last','DOP','Ref by','Med 1','Med 1 Desc','4','Med 2','Med 2 Desc','6']
dict={}


def readMedList():
    f=open("medlist","r")

#    dict={}
    for x in f:
        lst=[]
        line=x.split(" ")
    
        for w in line:
            lst.append(w)

        dict[lst[0]]=lst[1:]

def getcost(medname):
    return int(dict[medname][0])

def glowLed1(p):
    GPIO.setmode(GPIO.BCM)
    GPIO.setwarnings(False)
    GPIO.setup(p,GPIO.OUT)
    print("LED on")
    GPIO.output(p,GPIO.HIGH)
    time.sleep(2)
    print("LED off")
    GPIO.output(p,GPIO.LOW)

def glowLed(r,c):
    GPIO.setmode(GPIO.BCM)
    GPIO.setwarnings(False)
    GPIO.setup(14+c,GPIO.OUT)
    print("LED on")
    GPIO.output(14+c,GPIO.HIGH)
    #time.sleep(1)
    #GPIO.output(14+c,GPIO.LOW)

def validqr(qrlst):
    root1=Tk()
    pins=[]

    w, h = root1.winfo_screenwidth(), root1.winfo_screenheight()
    root1.geometry("%dx%d+0+0" % (w, h))
    L1 = Label(root1,font=("Helvetica", 20),text="Patient Name: "+qrlst[0].split(':')[1]+" "+qrlst[1])
    L2 = Label(root1,font=("Helvetica", 20),text="Date of Prescription: "+qrlst[2])
    L3 = Label(root1,font=("Helvetica", 20),text="Prescribed By: "+qrlst[3])
    
    txt1=qrlst[4]+' is in row number '+dict[qrlst[4]][1]+' and column number '+dict[qrlst[4]][2]
    
    r=int(dict[qrlst[4]][1])
    c=int(dict[qrlst[4]][2])
    glowLed(r,c)
    pins.append(c)

    L4 = Label(root1,font=("Helvetica", 20),text=txt1)
    
    txt2=qrlst[7]+' is in row number '+dict[qrlst[7]][1]+' and column number '+dict[qrlst[7]][2]
    r=int(dict[qrlst[7]][1])
    c=int(dict[qrlst[7]][2])
    glowLed(r,c)
    pins.append(c)
    
    L5 = Label(root1,font=("Helvetica", 20),text=txt2)
    L6 = Label(root1,font=("Helvetica", 20),text="Summary of medicines:")
    #L7 = Label(root1,font=("Helvetica", 20),text=str(int(qrlst[6])*getcost(qrlst[4])))
    listbox = Listbox(root1,font=("Helvetica", 20),width=50)
    listbox.insert(END,"Med_Name      Med_desc      Cost")
    listbox.insert(END," ")
    listbox.insert(END,qrlst[4]+"        "+qrlst[5]+"       "+' Rs.'+str(int(qrlst[6])*getcost(qrlst[4])))
    listbox.insert(END,qrlst[7]+"        "+qrlst[8]+"       "+' Rs.'+str(int(qrlst[9])*getcost(qrlst[4])))
    listbox.insert(END," ")
    #listbox.insert(END,qrlst[7]+'- Rs.'+str(int(qrlst[9])*getcost(qrlst[7])))
    listbox.insert(END,"Total=Rs."+ str((int(qrlst[6])*getcost(qrlst[4]))+(int(qrlst[9])*getcost(qrlst[4]))))
    scn1=Button(root1,text ="Confirm Transaction",font=("Helvetica", 40))
    scn2=Button(root1,text ="Cancel Transaction",font=("Helvetica", 40))
    #listbox.insert(END,str((int(qrlst[6])*getcost(qrlst[4]))+(int(qrlst[9])*getcost(qrlst[7])))
    L1.pack()
    L2.pack()
    L3.pack()
    L4.pack()
    L5.pack()
    L6.pack()
    #L7.pack()
    listbox.pack()
    scn1.pack(side=LEFT)
    scn2.pack(side=RIGHT)
    #time.sleep(2)
    root1.mainloop()
    for i in pins:
        GPIO.output(14+i,GPIO.LOW)

def verify():
    
    str1=""
    cmd=['zbarcam','--prescale=640x480']

    process = subprocess.Popen(cmd, stdout=subprocess.PIPE, stderr=subprocess.PIPE)

    while True:
        out = process.stdout.read(1)
        if out == '' and process.poll() != None:
            break
        if out != '':
            ch=out.decode()
            if ch=='$':
                process.stdout.close()
                process.kill()
                process.terminate()
                break
            str1=str1+ch
        #   sys.stdout.write(out)
            sys.stdout.flush()

    print(str1)
    #qrlst = lst1
    lst1=str1.split(',')
    print(lst1, " final arr")
    if len(lst1)==0:
        return False
    validqr(lst1)

def notscanned():
    root=Tk()
    w, h = root.winfo_screenwidth(), root.winfo_screenheight()
    root.geometry("%dx%d+0+0" % (w, h))
    L = Label(root,font=("Helvetica", 32),text='''Kindly put the prescription QR
in Front Of the Camera''')
    L.pack()
    scn=Button(root,height=1,width=5,text ="Scan",font=("Helvetica", 40),command=verify)
    scn.pack()
    root.mainloop()
#14,15,16

readMedList()
print(dict)
verify()

