#include <iostream>
#include <string>
#include <cstdlib>
#include <cstring>
using namespace std;
int a[1000+5];
int calc(int n)
{
    if(a[n]>0)return a[n];
    int cnt=1;
    for (int i = 1; i <= n/2; ++i) {
        cnt+=calc(i);
    }
    return a[n]=cnt;
}
int main() {
    int n;
    cin>>n;
    cout<<calc(n);
}
