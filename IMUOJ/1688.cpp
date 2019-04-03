#include<iostream>
#include<string>
using namespace std;
int main()
{
	string s[10];
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> s[i];
	}
	for (int i = 0; i < n-1; i++)
	{
		for (int j = 0; j < n-1-i; j++)
		{
			if (s[j] < s[j + 1]) swap(s[j], s[j + 1]);
		}
	}
	for (int i = 0; i < n; i++)
	{
		cout << s[i];
	}
}