#include<iostream>
using namespace std;
#include<string>
void f(int m)
{
	for (int i = 0; i < m*4;i++)
	{
		cout << " ";
	}
}
int main()
{
	string str;
	int k = 0;
	getline(cin, str);
	cout << str[0];
	for (int i = 1; i < str.length(); i++)
	{
		if(str[i]=='{')
		{
			cout << endl;
			f(k);
			k++;
		}
		if (str[i - 1] == '{' ) 
		{
			cout << endl;
			f(k);
		}
		if ((str[i - 1] == ';' || str[i - 1] == '}')&&str[i] != '}')
		{
			cout << endl;
			f(k);
		}
		if (str[i] == '}')
		{
			cout << endl;
			k--;
			f(k);
		}
		cout << str[i];
	}
}