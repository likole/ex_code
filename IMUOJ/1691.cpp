#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	getline(cin, str);
	for (int i = 0; i < str.length(); i++)
	{
		if (str[i] == '#')
		{
			str.erase(i, 1);
			i--;
		}
		else
		{
			break;
		}
	}
	cout << str;
}