#include<iostream>
using namespace std;
void swap(int &p, int &q);
int main()
{
	int a, b;
	cin >> a >> b;
	swap(a, b);
	cout << a << " " << b;
	//cin.get();
	//cin.get();
	return 0;
}
void swap(int &p, int &q)
{
	int tmp = p;
	p = q;
	q = tmp;
}