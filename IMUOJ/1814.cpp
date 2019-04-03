#include<iostream>
using namespace std;
int main()
{
	int x,m=-10000;
	while (cin.peek() != '\0'&&cin.peek() != EOF)
	{
		cin >> x;
		m = x > m ? x : m;
	}
	cout << m << endl;
	//cin.get();
	//cin.get();
	return 0;
}