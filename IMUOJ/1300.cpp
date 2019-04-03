#include<iostream>
#include<string>
using namespace std;
string keyboard = "`1234567890-=QWERTYUIOP[]\\ASDFGHJKL;'ZXCVBNM,./";
char get_correct_key(char c)
{
	for (int i = 0; i < keyboard.length(); i++)
	{
		if (keyboard[i] == c)return keyboard[i - 1];
	}
	return c;
}
int main()
{
	string str;
	while (getline(cin, str))
	{
		for (int i = 0; i < str.length(); i++)
		{
			cout << get_correct_key(str[i]);
		}
		cout << endl;
	}
}