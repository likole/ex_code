#include <iostream>
#include <string>
#include <cstdlib>
#include <cstring>
using namespace std;
int cnt[100];
int main() {
    string s;
    for (int i = 0; i < 4; ++i) {
        getline(cin,s);
        for (char j : s) {
            if(j<100)
            cnt[j]++;
        }
    }
    int maxV=0;
    for (int i = 'A'; i <= 'Z'; ++i) {
        if(cnt[i]>maxV)maxV=cnt[i];
    }
    for(int i=maxV;i>0;i--){
        int index=0;
        for (int j = 'A'; j <= 'Z'; ++j) {
            if(cnt[j]>=i) index++;
        }
        for (int j = 'A'; j <= 'Z'; ++j) {
            if(cnt[j]>=i){
                cout<<"*";
                index--;
            }
            else cout<<" ";
            if(index!=0)cout<<" ";
            else break;
        }
        cout<<endl;
    }
    for (int i = 'A'; i <= 'Z'; ++i) {
        cout<<(char)i;
        if(i!='Z')cout<<" ";
    }
}
