#include<iostream>
#include<string>
using namespace std;
string strcon(string, string);
int main()
{
	string stra, strb;
	cin >> stra >> strb;
	cout << strcon(stra, strb) << endl;
	//cin.get();
	//cin.get();
	return 0;
}
string strcon(string a, string b)
{
	string c;
	return c = a + b;
}