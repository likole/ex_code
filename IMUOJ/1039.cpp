#include<iostream>
using namespace std;
int main()
{
	int i;
	cin >> i;
	int factor = 1;
	for (int j = 1; j < i; j++)
	{
		if (i%j == 0) factor = j;
	}
	if (factor == 1) cout << "prime" << endl;
	else cout << "not prime" << endl;
	//cin.get();
	//cin.get();
	return 0;
}