#include<iostream>
#include<string>
#include<map>
using namespace std;
long long int fact(int n)
{
    long long int ans = 1;
    for (int i = 2; i <= n; i++)
    {
        ans *= i;
    }
    return ans;
}
long long int combi(int m, int n)
{
    long long int ans = 1;
    for (int i = 1; i <= n; i++)
    {
        ans *= (m - i + 1);
    }
    ans /= fact(n);
    return ans;
}
int main()
{
    map<char, int> count;
    int n;
    cin >> n;
    cin.get();
    string s;
    getline(cin, s);
    for (int i = 0; i < s.length(); i++)
    {
        if (!count.count(s[i])) count[s[i]] = 0;
        count[s[i]]++;
    }
    int ans = 1;
    for (map<char,int>::iterator it = count.begin(); it!= count.end() ; it++)
    {
        ans*=combi(n,it->second);
        n -= it->second;
    }
    cout << ans;
}