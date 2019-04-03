#include <iostream>
using namespace std;
int main(){
    double s,x,now=0,v=7;
    cin>>s>>x;
    while(now<s-x){
        now+=v;
        v*=.98;
    }
    cout<<(now+v<=s+x?"y":"n");
}
