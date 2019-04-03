#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	getline(cin, str);
	for (int i = 0; i < str.length(); i++)
	{
		if (str[i] >= 'A'&&str[i] <= 'Z')str[i] += 32;
	}
	cout << str;
	//cin.get();
	//cin.get();
	return 0;
}