package com.examle.android.altmedicalstore;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;

public class MainActivity extends AppCompatActivity {
    private WebView mywebView;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        mywebView = (WebView)findViewById(R.id.mywebView);
        WebSettings webSettings = mywebView.getSettings();
        mywebView.getSettings().setJavaScriptEnabled(true);
        mywebView.getSettings().setDomStorageEnabled(true);
        mywebView.setOverScrollMode(WebView.OVER_SCROLL_NEVER);

        mywebView.setWebViewClient(new WebViewClient());
        mywebView.loadUrl("https://arraysmedicpatient.000webhostapp.com/");
    }
    public void OnBackPresssed() {
        if(mywebView.canGoBack())
            mywebView.goBack();
        else
            super.onBackPressed();
    }
}
