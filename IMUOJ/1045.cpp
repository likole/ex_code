#include<iostream>
#include<string>
using namespace std;
void count(string &str, int &a, int &b, int &c, int &d);
int main()
{
	int a = 0, b = 0, c = 0, d = 0;
	string str;
	getline(cin, str);
	count(str, a, b, c, d);
	cout << a << " " << b << " " << c << " " << d << " ";
	//cin.get();
	//cin.get();
	return 0;
}
void count(string &str, int &a, int&b, int &c, int &d)
{
	for (int i = 0; i < str.length(); i++)
	{

		if ((str[i] >= 'a'&&str[i] <= 'z') || (str[i] >= 'A'&&str[i] <= 'Z')) a++;
		else if (str[i] >= '0'&&str[i] <= '9') b++;
		else if (str[i] == 32) c++;
		else d++;
	}
}