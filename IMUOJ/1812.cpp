#include<iostream>
#include<string>
#include<sstream>
#include<cmath>
using namespace std;
int main()
{
	string s;
	getline(cin, s);
	for (int i = s.length() - 1; i >= 0; i--)
	{
		if (s[i] != '0' && s[i] != '1') s.erase(i, 1);
	}
	stringstream ss(s);
	int n;
	ss >> n;
	int ans=0,k=0;
	while (n > 0)
	{
		ans += (n % 10*pow(2,k++));
		n /= 10;
	}
	cout << ans;
}