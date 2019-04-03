#include<iostream>
#include<string>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		char c;
		cin >> c;
		cin.get();
		string str;
		getline(cin, str);
		if (c >= 97)c -= 32;
		for (int j = 0; j < str.length(); j++)
		{
			if (str[j] == c) str[j] += 32;
			else if (str[j] == c + 32) str[j] -= 32;
		}
		cout << str << endl;
	}
}