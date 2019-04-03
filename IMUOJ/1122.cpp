#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str1, str2;
	cin >> str2;
	str1=str2;
	for (int i = 0; i < str1.length(); i++)
	{
		str2[str1.length() - i - 1] = str1[i];
	}
	cout << str1 + str2 << endl;
	//cin.get();
	//cin.get();
	return 0;
}