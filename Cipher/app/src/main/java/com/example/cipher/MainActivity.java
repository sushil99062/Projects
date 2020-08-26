package com.example.cipher;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.util.Base64;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import java.security.MessageDigest;

import javax.crypto.Cipher;
import javax.crypto.spec.SecretKeySpec;

public class MainActivity extends AppCompatActivity {

    EditText inputText ,inputPassword,news;
    TextView outputText;
    Button eb,db;
    String outputString;
    String AES="AES";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        inputPassword=(EditText)findViewById(R.id.password);
        news=(EditText)findViewById(R.id.news);
        inputText=(EditText)findViewById(R.id.text);
        eb=(Button)findViewById(R.id.button1);
        db=(Button)findViewById(R.id.button2);

        eb.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                try {
                    outputString=encrypt(inputText.getText().toString(),inputPassword.getText().toString());
                    news.setText(outputString);
                } catch (Exception e) {
                    e.printStackTrace();
                }

            }
        });

      db.setOnClickListener(new View.OnClickListener() {
          @Override
          public void onClick(View v) {
              try {

                  outputString=decrypt(news.getText().toString(),inputPassword.getText().toString());
                  news.setText(outputString);
              } catch (Exception e) {
                  e.printStackTrace();
              }
          }
      });

    }

    private String decrypt(String sus, String password) throws Exception {
        SecretKeySpec key = generateKey(password);
        Cipher c= Cipher.getInstance(AES);
        c.init(Cipher.DECRYPT_MODE,key);
        byte[] decodeValue=  Base64.decode(sus,Base64.DEFAULT);
        byte[] decValue = c.doFinal(decodeValue);
        String deccryted= new String(decValue);
        return deccryted;
    }

    private String encrypt(String Data, String password) throws Exception{
        SecretKeySpec key = generateKey(password);
        Cipher c= Cipher.getInstance(AES);
        c.init(Cipher.ENCRYPT_MODE,key);
        byte[] encVal= c.doFinal(Data.getBytes());
        String encryptedValue= Base64.encodeToString(encVal,Base64.DEFAULT);
        return encryptedValue;
    }

    private SecretKeySpec generateKey(String password) throws  Exception{
        final MessageDigest digest =MessageDigest.getInstance("SHA-256");
        byte[] bytes=password.getBytes("UTF-8");
        digest.update(bytes,0,bytes.length);
        byte[] key=digest.digest();
        SecretKeySpec secretKeySpec = new SecretKeySpec(key,"AES");
        return secretKeySpec;
    }
}
