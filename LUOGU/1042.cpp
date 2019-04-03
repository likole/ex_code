#include <iostream>
#include <cmath>
using namespace std;
int w11,l11,w21,l21,c21[6000][2],i21;
char c;
int main()
{
    while (cin>>c&&c!='E'){
        
        if(c=='W'){
            w11++;
            w21++;
        }else{
            l11++;
            l21++;
        }
        if((w11>=11||l11>=11)&&abs(w11-l11)>=2){
            cout<<w11<<":"<<l11<<endl;
            w11=0;
            l11=0;
        }
        if((w21>=21||l21>=21)&&abs(w21-l21)>=2){
            c21[i21][0]=w21;
            c21[i21][1]=l21;
            i21++;
            w21=0;
            l21=0;
        }
    }
    cout<<w11<<":"<<l11<<endl;
    cout<<endl;
    for (int i = 0; i < i21; ++i) {
        cout<<c21[i][0]<<":"<<c21[i][1]<<endl;
    }
    cout<<w21<<":"<<l21<<endl;

}
