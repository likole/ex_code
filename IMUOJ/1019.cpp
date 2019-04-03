#include<iostream>
#include<string>
using namespace std;
int main()
{
	string c;
	cin >> c;
	cout << c.length() << endl<<c[0];
	for (int i = 1; i < c.length(); i++)
	{
		cout << " " << c[i];
	}
	cout << endl;
	for (int j = c.length()-1; j >=0; j--)
	{
		cout << c[j];
	}
	//cin.get();
	//cin.get();
	return 0;
}