#include <iostream>
#include <string>
using namespace std;
int calc(string s)
{
    int cnt=1;
    for (int i = 0; i < s.length(); ++i) {
        cnt*=(s[i]-64);
    }
    return cnt%47;
}
int main() {
    string a,b;
    cin>>a>>b;
    if(calc(a)==calc(b))
    {
        cout<<"GO"<<endl;
    }else{
        cout<<"STAY"<<endl;
    }
}
