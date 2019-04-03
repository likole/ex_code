#include <iostream>
#include <cmath>
using namespace std;
int main(){
    int n;
    cin>>n;
    int a=(-1.0+sqrt(1+8*(n-1)))/2+2;
    int b=(a-2)*(1+a-2)/2;
    if(a&1){//shun xu
        cout<<(n-b)<<"/"<<a-(n-b);
    }else{
        cout<<a-(n-b)<<"/"<<n-b;
    }
}
