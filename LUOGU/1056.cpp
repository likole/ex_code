#include<iostream>
#include<cstdio>
#include<algorithm>
#include<cstring>
using namespace std;
int x[1000+5],y[1000+5],xx[1000+5],yy[1000+5];
int m,n,k,l,d,x1,y11,x2,y2;
bool cmp(int a,int b){ return a>b;}
int main()
{
    scanf("%d %d %d %d %d",&m,&n,&k,&l,&d);
    for(int i=0;i<d;i++){
        scanf("%d %d %d %d",&x1,&y11,&x2,&y2);
        if(x1==x2){
            if(y11<y2){
                y[y11]++;
            }else{
                y[y2]++;
            }
        }else{
            if(x1<x2){
                x[x1]++;
            }else{
                x[x2]++;
            }
        }
    }
    memcpy(xx,x,sizeof(x));
    memcpy(yy,y,sizeof(y));
    sort(xx,xx+m,cmp);
    sort(yy,yy+n,cmp);
    int a=xx[k-1],b=yy[l-1];
    for(int i=0;i<m;i++){
        if(x[i]>=a){
            cout<<i;
            if(--k)cout<<" ";
        }
    }
    cout<<endl;
    for(int i=0;i<n;i++){
        if(y[i]>=b){
            cout<<i;
            if(--l)cout<<" ";
        }
    }
}

