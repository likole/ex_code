#include <iostream>
using namespace std;
int main(){
    int x,f=1;
    cin>>x;
    if(x<0){
        f=-1;
        x=-x;
    }
    int t=0;
    while (x){
        t=t*10+x%10;
        x/=10;
    }
    cout<<f*t;
}
