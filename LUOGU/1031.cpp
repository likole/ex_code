#include <iostream>
using namespace std;
int a[105],n,ans,sum;
int main()
{
    cin>>n;
    for (int i = 0; i < n; ++i) {
        cin>>a[i];
        sum+=a[i];
    }
    sum/=n;
    for (int i = 0; i < n-1; ++i) {
        if(a[i]!=sum){
            a[i+1]-=(sum-a[i]);
            ans++;
        }
    }
    cout<<ans;
}
