#include<iostream>
#include<string>
using namespace std;
int main()
{
	string a, b;
	getline(cin,a);
	b = a;
	for (int i = 0; i < a.length(); i++)
	{
		b[i] = a[a.length() - 1 - i];
	}
	cout << b<<endl;
	//cin.get();
	//cin.get();
	return 0;
}