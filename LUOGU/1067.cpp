#include<iostream>
using namespace std;
int main()
{
    int n,a;
    cin>>n;
    //n
    cin>>a;
    if(a==0){
        cout<<"";
    }else if(a==1){
        cout<<"x^"<<n;
    }else if(a==-1){
        cout<<"-x^"<<n;
    }else{
        cout<<a<<"x^"<<n;
    }
    while(--n>1){
        cin>>a;
        if(a==0){
            cout<<"";
        }else if(a==1){
            cout<<"+x^"<<n;
        }else if(a==-1){
            cout<<"-x^"<<n;
        }else if(a>0){
            cout<<"+"<<a<<"x^"<<n;
        }else{
            cout<<a<<"x^"<<n;
        }
    }
    //yici
    cin>>a;
    if(a==0){
        cout<<"";
    }else if(a==1){
        cout<<"+x";
    }else if(a==-1){
        cout<<"-x";
    }else if(a>0){
        cout<<"+"<<a<<"x";
    }else{
        cout<<a<<"x";
    }
    //changshu
    cin>>a;
    if(a==0){
        cout<<"";
    }else if(a>0){
        cout<<"+"<<a;
    }else{
        cout<<a;
    }
}

