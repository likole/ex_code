#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	while (cin >> str)
	{
		for (int i = 0; i < str.length(); i++)
		{
			if (str[i] >= 'a'&&str[i] <= 'z')str[i] -= 32;
		}
		cout << str << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}