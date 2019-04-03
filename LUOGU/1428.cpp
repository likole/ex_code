#include <iostream>
using namespace std;
int a[105];
int cnt;
int main() {
    int n;
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>a[i];
        cnt=0;
        for(int j=0;j<i;j++)
        {
            if(a[j]<a[i])cnt++;
        }
        cout<<cnt;
        if(i!=n-1) cout<<" ";
    }
    return 0;
}
