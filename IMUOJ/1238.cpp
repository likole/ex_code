#include<iostream>
#include<cmath>
#include<cstdlib>
using namespace std;
int main()
{
	double p, q;
	while (cin >> p >> q)
	{
		p /= 100, q /= 100;
		for (int i = 1;; i++)
		{
			if (ceil(i*p) <= floor(i*q))
			{
				cout << i << endl;
				break;
			}
		}
	}
}