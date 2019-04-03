#include<iostream>
#include<string>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin.get();
		string s;
		char c1, c2;
		getline(cin, s);
		cin >> c1;
		cin >> c2;
		for (int i = 0; i < s.length(); i++)
		{
			if (s[i] == c1)s[i] = c2;
		}
		cout << s<<endl;
	}
}