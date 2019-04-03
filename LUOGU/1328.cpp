#include <iostream>
#include <cmath>
using namespace std;
int res[5][5]={
        0,0,1,1,0,
        1,0,0,1,0,
        0,1,0,0,1,
        0,0,1,0,1,
        1,1,0,0,0
};
int xa[205],xb[205],ia,ib,ca,cb,n,aa,ab;
int main(){
    cin>>n>>ca>>cb;
    for (int i = 0; i < ca; ++i) {
        cin>>xa[i];
    }
    for (int i = 0; i < cb; ++i) {
        cin>>xb[i];
    }
    for (int i = 0; i < n; ++i) {
        aa+=res[xa[ia%ca]][xb[ib%cb]];
        ab+=res[xb[ib%cb]][xa[ia%ca]];
        ia=(ia+1)%ca;
        ib=(ib+1)%cb;
    }
    cout<<aa<<" "<<ab;
}
