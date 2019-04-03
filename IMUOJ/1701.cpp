#include<iostream>
using namespace std;
int main()
{
	int a, b;
	cin >> a >> b;
	int *pa, *pb;
	pa = &a;
	pb = &b;
	cout << *pa << " " << *pb << endl;
	//cin.get();
	//cin.get();
	return 0;
}