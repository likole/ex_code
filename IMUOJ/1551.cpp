#include<iostream>
#include<string>
using namespace std;
int main()
{
	string ans = "01230120022455012623010202";
	string str;
	while (cin >> str)
	{
		char last = '0';
		for (int i = 0; i < str.length(); i++)
		{
			if (ans[str[i] - 65] != '0' && ans[str[i] - 65] != last)
			{
				last=ans[str[i] - 65];
				cout << last;
			}
			else
			{
				last = ans[str[i] - 65];
			}
		}
		cout << endl;
	}
}