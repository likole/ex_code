#include <iostream>
#include <string>
using namespace std;
int main() {
    int t=1,check=0;
    string checkcode="0123456789X";
    string isbn;
    cin>>isbn;
    for(int i=0;i<isbn.length();i++){
        if(isbn[i]=='-')continue;
        check+=(isbn[i]-48)*t++;
        if(t==10)break;
    }
    check%=11;
    if(isbn[isbn.length()-1]==checkcode[check]){
        cout<<"Right\n";
    } else{
        isbn[isbn.length()-1]=checkcode[check];
        cout<<isbn<<endl;
    }

}
