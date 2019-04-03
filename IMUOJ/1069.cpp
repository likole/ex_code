#include<iostream>
#include<string>
using namespace std;
int main()
{
	int a = 0, b = 0, c = 0, d = 0;
	string str;
	getline(cin, str);
	for (int i = 0; i < str.length(); i++)
	{
		if ((str[i] >= 'A' && str[i] <= 'Z') || (str[i] >= 'a' && str[i] <= 'z')) a++;
		else if (str[i] == ' ') b++;
		else if (str[i] >= '0' && str[i] <= '9') c++;
		else d++;

	}
	cout << a << " " << c << " "<< b << " "<< d ;
	//cin.get();
	//cin.get();
	return 0;
}