#include<iostream>
using namespace std;
int main()
{
	int x, y, z;
	for (int x = 0; x <= 20; x++)
	{
		for (int y = 0; y <= 33; y++)
		{
			z = 100 - x - y;
			if (15*x + 9*y + z == 300 && z >= 0)
			{
				cout << "cock=" << x << ",hen=" << y << ",chicken=" << z << endl;
			}
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}