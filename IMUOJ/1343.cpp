#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str = "ECFAJKLBDGHIVWZYMNOPQRSTUX000000erwqtyghbnuiopsjkdlfazxcvm";
	string a;
	while (getline(cin, a))
	{
		if (a == "#")break;
		for (int i = 0; i < a.length(); i++)
		{
			if (a[i] >= 'A'&&a[i] <= 'Z' || a[i] >= 'a'&&a[i] <= 'z') a[i] = str[a[i] - 65];
		}
		cout << a << endl;
	}
}