#include<iostream>
using namespace std;
int main()
{
	int num,fac=0;
	cin >> num;
	for (int i = 1; i < num; i++)
	{
		if (num%i == 0) fac = i;
	}
	if (fac != 1)cout << "0\n";
	else cout << "1\n";
	//cin.get();
	//cin.get();
	return 0;
}