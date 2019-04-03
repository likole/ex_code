#include <iostream>
using namespace std;
int notree[10000+5];
int main() {
    int l,m,a,b;
    cin>>l>>m;
    while (m--)
    {
        cin>>a>>b;
        for(int i=a;i<=b;i++)
        {
            notree[i]=1;
        }
    }
    int cnt=0;
    for(int i=0;i<=l;i++)
    {
        if(notree[i]==0) cnt++;
    }
    cout<<cnt;
    return 0;
}
