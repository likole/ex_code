#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	getline(cin, str);
	for (int i = 0; i < str.length(); i++)
	{
		cout << str[str.length() - 1 - i];
	}
	//cin.get();
	//cin.get();
	return 0;
}