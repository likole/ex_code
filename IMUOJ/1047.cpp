#include<iostream>
using namespace std;
int mod(int, int);
int main()
{
	int a, b;
	cin >> a >> b;
	cout << mod(a, b) << endl;
	//cin.get();
	//cin.get();
	return 0;
}
int mod(int a, int b)
{
	return a%b;
}