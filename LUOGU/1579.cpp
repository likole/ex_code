#include <iostream>
using namespace std;
int vis[20000],p[20000],num;
int main(){
    for(int i=2;i<20000;i++){
        if(!vis[i])p[num++]=i;
        for (int j = 2; j*i <20000 ; ++j) {
            vis[i*j]=1;
            if(i%j==0)break;
        }
    }
    int n,a,b,c;
    cin>>n;
    for(a=0;a<num;a++){
        for(b=0;b<num;b++){
            c=n-p[a]-p[b];
            if(c>0&&c<n&&!vis[c]){
                cout<<p[a]<<" "<<p[b]<<" "<<c;
                return 0;
            }
        }
    }
}
