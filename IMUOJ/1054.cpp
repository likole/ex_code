#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str[3];
	for (int i = 0; i < 3; i++)
	{
		getline(cin, str[i]);
	}
	for (int i = 0; i < 2; i++)
	{
		for (int j = 0; j < 2-i; j++)
		{
			if (str[j] > str[j + 1]) swap(str[j], str[j + 1]);
		}
	}
	for (int i = 0; i < 3; i++)
	{
		cout << str[i] << endl;
	}
	return 0;
}