#include <iostream>
#include <cstring>
using namespace std;
int main(){
    int A,B,C,a,b,c,d,t,flag2=0;
    int arr[11];
    cin>>A>>B>>C;
    for ( a = 123; a <=987; ++a) {
        if(a%A)continue;
        b=a/A*B;
        c=a/A*C;
        if(c>987)continue;
        memset(arr,0,sizeof(arr));
        int flag=0;
        d=a*1000000+b*1000+c;
        while (d){
            t=d%10;
            d/=10;
            if(arr[t]||t==0){
                flag=1;
                break;
            }
            arr[t]=1;
        }
        if(!flag){
            flag2=1;
            cout<<a<<" "<<b<<" "<<c<<endl;
        }
    }
    if(!flag2){
        cout<<"No!!!";
    }

}
