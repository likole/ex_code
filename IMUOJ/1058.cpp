#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	int n, m;
	cin >> n;
	cin.get();
	getline(cin, str);
	cin >> m;
	for (int i = m-1; i < n; i++)
	{
		cout << str[i];
	}
	//cin.get();
	//cin.get();
	return 0;
}