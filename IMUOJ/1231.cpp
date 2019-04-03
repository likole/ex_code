#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	while (getline(cin, str))
	{
		char m = 'A';
		for (int i = 0; i < str.length(); i++)
		{
			if (str[i] > m) m = str[i];
		}
		for (int i = 0; i < str.length(); i++)
		{
			cout << str[i];
			if (str[i] == m)cout << "(max)";
		}
		cout << endl;
	}
	return 0;
}