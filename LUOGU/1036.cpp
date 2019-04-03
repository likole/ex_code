#include<iostream>
#include <cmath>
using namespace std;
int n,k,cnt=0,sum=0;
int num[25];
bool is_prime(int a)
{
    if(a<2) return false;
    int i=sqrt(a);
    for (int j = 2; j <= i; ++j) {
        if(a%j==0)
        {
            return false;
        }
    }
    return true;
}
void dfs(int selected,int cur)
{
    if(selected==k)
    {
        if(is_prime(sum))
        {
            cnt++;
        }
        return;
    }
    if(cur==n) return;
    dfs(selected,cur+1);
    sum+=num[cur];
    dfs(selected+1,cur+1);
    sum-=num[cur];
}
int main()
{
    cin>>n>>k;
    for (int i = 0; i < n; ++i) {
        cin>>num[i];
    }
    dfs(0,0);
    cout<<cnt;
}
