#include<iostream>
#include<string>
using namespace std;
int main()
{
	int n;
	cin >> n;
	cin.get();
	string str;
	for (int i = 0; i < n; i++)
	{
		getline(cin, str);
		for (int i = str.length() - 1; i >= 0; i--)
		{
			cout << str[i];
		}
		cout << endl;
	}
}