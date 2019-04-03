#include<iostream>
#include<string>
using namespace std;
void del_char(string &, char);
int main()
{
	char c;
	string str;
	cin >> c;
	cin.get();
	getline(cin, str);
	del_char(str, c);
	cout << str;
	//cin.get(); cin.get();
	return 0;
}
void del_char(string &str, char c)
{
	for (int i = str.length() - 1; i >= 0; i--)
	{
		if (str[i] == c) str.erase(i, 1);
	}
}