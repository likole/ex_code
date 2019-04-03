#include<iostream>
#include<cstdio>
#include<cmath>
#include<cstdlib>
#include<algorithm>
using namespace std;
int main()
{
    int n,x;
    cin>>n>>x;
    int n_c=n;
    int cur=0;
    int cur_index=-1;
    int cnt=0;
    while(n_c){
        cur=n_c%10;
        n_c/=10;
        cur_index++;
        if(x<cur){
            if(x==0) cnt+=n_c*pow(10,cur_index);
            else cnt+=(n_c+1)*pow(10,cur_index);
        }else if(x>cur){
            cnt+=n_c*pow(10,cur_index);
        }else{
            if(x==0) cnt=cnt+(n_c-1)*pow(10,cur_index)+n%(int)pow(10,cur_index)+1;
            else cnt=cnt+(n_c)*pow(10,cur_index)+n%(int)pow(10,cur_index)+1;
        }
    }
    cout<<cnt;
}

