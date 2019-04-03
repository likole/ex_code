#include<iostream>
#include<cstdio>
using namespace std;
int inmem[1000+5],mem[1000+5],m,n,l=0,r=0,c=0,ans=0,t;
int main()
{
    scanf("%d %d",&m,&n);
    for(int i=0;i<n;i++){
        scanf("%d",&t);
        if(!inmem[t]){
            ans++;
            if(c==m){
                inmem[mem[l++]]=0;
                inmem[mem[r++]=t]=1;
            }else{
                inmem[mem[r++]=t]=1,c++;
            }
        }
    }
    cout<<ans;
}

