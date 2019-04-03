#include<iostream>
#include<cstdio>
#include<algorithm>
#include<cstring>
using namespace std;
int p[10000000];
int hw(int x){
    int a=x;
    int b=0;
    while (x){
        b=b*10+(x%10);
        x/=10;
    }
    return a==b;
}
int main()
{
    for(int i=2;i<10000000;i++){
        for(int j=2;j*i<=10000000;j++){
            p[i*j]=1;
            if(i%j==0)break;
        }
    }
    int a,b;
    scanf("%d %d",&a,&b);
    b=10000000<b?10000000:b;
    if(!(a&1))a++;
    for(int i=a;i<=b;i+=2){
        if(!p[i]&&hw(i))printf("%d\n",i);
    }
}

